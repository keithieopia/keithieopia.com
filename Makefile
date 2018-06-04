YARN := $(shell command -v yarn 2>/dev/null)
HUGO := $(shell command -v hugo 2>/dev/null)

export PATH := node_modules/npm-sass/bin:$(PATH)

deps:
ifndef YARN
	$(error "yarn is not installed")
endif
ifndef HUGO
    $(error "hugo is not installed")
endif
	yarn upgrade

scss:
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
