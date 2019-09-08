# Version 0.1

## About

This is a PHP Framework that is meant to make build system easy .

Its a system base on Using one Controller  to render different view(s) .The main controller can be mutate to accommodate other feature to a view .

# Controller
The Controller is saved in the configirations folder .
The controller is called <u> <strong> RouteRenderer.php  </strong>  </u> . <br>

The controller renders all the data to the view .  The main function of the controller class is main to load the required data to render a view , this is to mean that it will load all the includes and the JavaScript files for each view that is loaded from <strong> LoadModulesResources.php </strong> file .

# LoadModulesResources.php 
Loads the files that are required to load a view .

# AccessController.php
Controls access to a view or page that the user was granted . The access details are saved from the database , hence forth saying this class loads data from the database and passes the data to check which view a user can access only at runtime .

Page sessions are also controlled from this class . Access is also enforced by an interface called <u> ReactToAccess.php </u> . The  routes are indeed


# Views
The view are saved in different folders in any location in the folders but one will note that i have saved them in a folder a called <b> view </b>