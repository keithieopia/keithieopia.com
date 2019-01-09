HUGO := $(shell command -v hugo 2>/dev/null)

precheck:
ifndef HUGO
	$(error "hugo is not installed")
endif

build: precheck
	-rm -r public/
	hugo

serve: precheck
	hugo serve -D

push: build
	rsync -avz -e ssh --progress --no-perms --no-owner --no-group --no-times public/ keithieopia:/srv/htdocs/keithieopia.com
