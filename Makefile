# Makefile is notoriously obsessive with tabs, change it to be slightly more
# user friendly by using a ">" instead
.RECIPEPREFIX = >

yarn:
> yarn upgrade
> rsync -avh node_modules/microlight/microlight.js themes/hugo-zen/static/js/
> rsync -avh node_modules/skeleton-css/css/*.css themes/hugo-zen/static/css/
> rsync -avh node_modules/typeface-quattrocento/files/quattrocento-latin-400.woff2 themes/hugo-zen/static/fonts/
> rsync -avh node_modules/typeface-quattrocento/files/quattrocento-latin-400.woff themes/hugo-zen/static/fonts/
> rsync -avh node_modules/typeface-roboto/files/roboto-latin-400.woff2 themes/hugo-zen/static/fonts/
> rsync -avh node_modules/typeface-roboto/files/roboto-latin-400.woff themes/hugo-zen/static/fonts/
> rsync -avh node_modules/typeface-fredericka-the-great/files/fredericka-the-great-latin-400.woff2 themes/hugo-zen/static/fonts/
> rsync -avh node_modules/typeface-fredericka-the-great/files/fredericka-the-great-latin-400.woff themes/hugo-zen/static/fonts/


dev: yarn
> hugo server --buildDrafts --watch &
> sleep 5s && xdg-open "http://127.0.0.1:1313"

build: yarn
> rm -r public/
> hugo

push: build
> rsync -avz -e ssh --progress public/ timothy@keithieopia.com:/srv/http/keithieopia
