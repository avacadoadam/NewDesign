

$(document).ready(function () {

    //Navbar elements
    var HomePage = $(".NavBar_Home");
    var Aboutme = $(".NavBar_AboutMe");
    var Projects = $(".NavBar_Projects");

    //Container elements
    var HomepageDiv = $(".Homepage");
    var AboutmeDiv = $(".Aboutme");
    var ProjectsDiv = $(".Projects");



        function ChangeToHomepage() {

                AboutmeDiv.hide();
                ProjectsDiv.hide();
                HomepageDiv.fadeIn(200);

        }
        
        function Change2Aboutme() {

                HomepageDiv.hide();
                ProjectsDiv.hide();
                AboutmeDiv.css("display","flex").hide().fadeIn(200);

        }

        function ChangeToProjects() {

                HomepageDiv.hide();
                AboutmeDiv.hide();
                ProjectsDiv.fadeIn(200);

        }

        HomePage.click(function () {
            ChangeToHomepage();
        })


        Aboutme.click(function () {
            Change2Aboutme();
        })

        Projects.click(function () {
            ChangeToProjects();
        })


    if(window.location.hash) {
        var hash = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
        if(hash == "Aboutme"){
            Change2Aboutme();
        }else if(hash == "Projects"){
            ChangeToProjects();

        }            // hash found
    }



})


