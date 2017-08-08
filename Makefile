
# Old stuff from Rakefile that hasn't been converted yet...
#
#task :default => [:build]
#task :build => [:bower_install, :bower_copy, :jekyll_build]
#task :serve => [:bower_install, :bower_copy, :jekyll_serve]
#
#task :bower_install do
#    system('bower install')
#end
#
#task :upload do
#    system('rsync -rvhz --progress \
#            --delete _site/ keithieopia.com:/srv/http/keithieopia')
#end


# Makefile is notoriously obsessive with tabs, change it to be slightly more
# user friendly by using a ">" instead
.RECIPEPREFIX = >


yarn:
> yarn upgrade
> rsync -avh node_modules/skeleton-css/css/*.css themes/hugo-zen/static/css/
> rsync -avh node_modules/typeface-quattrocento/files/quattrocento-latin-400.woff2 themes/hugo-zen/static/fonts/
> rsync -avh node_modules/typeface-quattrocento/files/quattrocento-latin-400.woff themes/hugo-zen/static/fonts/
> rsync -avh node_modules/typeface-roboto/files/roboto-latin-400.woff2 themes/hugo-zen/static/fonts/
> rsync -avh node_modules/typeface-roboto/files/roboto-latin-400.woff themes/hugo-zen/static/fonts/


dev: yarn
> hugo server --buildDrafts --watch &
> sleep 5s && xdg-open "http://127.0.0.1:1313"

build: yarn
> rm -r public/
> hugo
