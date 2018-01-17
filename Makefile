# Makefile is notoriously obsessive with tabs, change it to be slightly more
# user friendly by using a ">" instead
.RECIPEPREFIX = >

deps:
> yarn upgrade

scss:
> npm-sass themes/hugo-zen/static/css/style.scss > themes/hugo-zen/static/css/style.css

build: scss git
> rm -r public/
> hugo

serve:
#> hugo server --buildDrafts --watch &
#> sleep 5s && xdg-open "http://127.0.0.1:1313"
> sleep 2s && xdg-open "http://127.0.0.1:8000" &
> cd public && python -m SimpleHTTPServer


push: build
> rsync -avz -e ssh --progress --no-perms --no-owner --no-group --no-times public/ keithieopia:/srv/htdocs/keithieopia.com

git:
> echo "name: git" > data/git.yml
> echo -n "ref: " >> data/git.yml
> git rev-parse HEAD >> data/git.yml
> echo -n "shortref: " >> data/git.yml
> git rev-parse --short HEAD >> data/git.yml
> echo -n "tag: " >> data/git.yml
> git describe >> data/git.yml
> echo -n "date: " >> data/git.yml
> git log -1 --format=%ci >> data/git.yml
> echo -n "prettydate: " >> data/git.yml
> git log -1 --format=%ci | date -f - +"%B %-d, %Y" >> data/git.yml
