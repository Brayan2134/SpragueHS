/*
    Author: Quevedo Ramos, Brayan
    Co-Author: Millett, Jordan
    Date: 4/20/19 

    Modifyers:
    ----------
*/
/*
    THIS IS THE GLOBAL NAV FILE FOR ALL OF SPRAGUE HIGH SCHOOL
    ----------------------------------------------------------
    THIS WILL USE THE BASE HREF OF THE INDEX PAGE AND WORK DOWN DIR FROM THERE.
    ANY CHANGES HERE WILL BE GLOBAL.

    RECOURCES ON HOW TO MODIFY OR USE THIS FILE
    -------------------------------------------
    https://stackoverflow.com/questions/5559578/having-links-relative-to-root
    https://stackoverflow.com/questions/18441233/html-base-tag-referring-to-local-folder

    GENERAL NOTES
    -------------
    After each line in the document.write, use the \ to declare new line.
    IF YOU GET AN ERROR OF LITERAL STRING, OR NEXT LINE IS UNDERLINE ALTHOUGH YOU USED '\'
    MAKE SURE THAT THERES NO SPACES AFTER THE '\' THATS UNDERLINED.
    
*/
document.write('\
    <nav class="navbar navbar-expand-lg navbar-light bg-light">\
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">\
            <span class="navbar-toggler-icon"></span>\
        </button>\
        <div class="collapse navbar-collapse" id="navbarNavDropdown">\
            <ul class="navbar-nav">\
                \
                <!--THIS IS THE ACADEMICS SECTION-->\
                <li class="nav-item dropdown">\
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\
                        Academics\
                    </a>\
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">\
                        <a class="dropdown-item" href="#">Action</a>\
                        <a class="dropdown-item" href="#">Another action</a>\
                        <a class="dropdown-item" href="#">Something else here</a>\
                    </div>\
                </li>\
                \
                <!--THIS IS THE SPORTS SECTION-->\
                <li class="nav-item dropdown">\
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\
                        Sports\
                    </a>\
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">\
                        <a class="dropdown-item" href="#">Yes</a>\
                        <a class="dropdown-item" href="#">Another action</a>\
                        <a class="dropdown-item" href="#">Something else here</a>\
                    </div>\
                </li>\
            </ul>\
        </div>\
    </nav>\
');