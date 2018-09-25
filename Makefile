YARN := $(shell command -v yarn 2>/dev/null)
HUGO := $(shell command -v hugo 2>/dev/null)
INSTALLED := $(shell yarn check 2>/dev/null)

export PATH := node_modules/npm-sass/bin:$(PATH)

precheck:
ifndef YARN
	$(error "yarn is not installed")
endif
ifndef HUGO
    $(error "hugo is not installed")
endif
ifndef INSTALLED
	yarn install
endif
# Below runs only if package list is older than 1 day
	if find "package.json" -mtime +1 -print | grep -q "package.json"; then \
	touch package.json \
	./node_modules/yarn-check/bin/cli.js; \
	fi

update: precheck
	yarn upgrade

scss: precheck
	npm-sass themes/solomons/static/css/style.scss > themes/solomons/static/css/style.css

build: scss git
	-rm -r public/
	hugo

serve:
	sleep 2s && xdg-open "http://127.0.0.1:8000" &
	-cd public && python -m SimpleHTTPServer 2>/dev/null

push: build
	rsync -avz -e ssh --progress --no-perms --no-owner --no-group --no-times public/ keithieopia:/srv/htdocs/keithieopia.com

git:
	-mkdir -p data
	echo "name: git" > data/git.yml
	echo -n "ref: " >> data/git.yml
	git rev-parse HEAD >> data/git.yml
	echo -n "shortref: " >> data/git.yml
	git rev-parse --short HEAD >> data/git.yml
	echo -n "tag: " >> data/git.yml
	git describe >> data/git.yml
	echo -n "date: " >> data/git.yml
	git log -1 --format=%ci >> data/git.yml
	echo -n "prettydate: " >> data/git.yml
	git log -1 --format=%ci | date -f - +"%B %-d, %Y" >> data/git.yml
