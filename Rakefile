task :default => [:build]
task :build => [:bower_install, :bower_copy, :jekyll_build]
task :serve => [:bower_install, :bower_copy, :jekyll_serve]

task :bower_install do
    system('bower install')
end

task :bower_copy do
    FileUtils.cd('bower_components/') do
        cp('pt-serif/fonts/pt-serif/pt-serif-regular.ttf', '../assets/font/pt-serif.ttf')
        cp('raleway-googlefont/Raleway-Regular.ttf', '../assets/font/raleway.ttf')
        cp('hack/fonts/hack/hack-regular.ttf', '../assets/font/hack.ttf')

        cp('jquery/dist/jquery.min.js', '../assets/js/')
        cp('bootstrap/dist/js/bootstrap.min.js', '../assets/js/')

        cp('bootstrap/dist/css/bootstrap.min.css', '../assets/css/')
    end
end

task :jekyll_serve do
    system('jekyll serve')
end

task :jekyll_build do
    system('jekyll build')
end

task :upload do
    system('rsync -rvhz --progress \
            --delete _site/ keithieopia.com:/srv/http/keithieopia')
end
