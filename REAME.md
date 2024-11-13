# Database Management Instructions

## For Itai

Here is the improved version of the text for better readability on GitHub:

This will save the schema and data.

For Juan
When Juan takes the latest changes, he needs to export the data and schema from the db folder to his MAMP because our sites read from our local databases. He will need to run an import using the phpMyAdmin tool (on http://localhost/phpmyadmin/ or http://localhost:8888/phpmyadmin/ for him). Click on the site1 database (create if missing) and then import the schema and data.

Repairing the Database
To repair the database, add the following line to wp-config.php:

Then visit http://yourdomain.com/wp-admin/maint/repair.php and follow the instructions. Remove this line from wp-config.php afterward.

Workflow
When Itai or Juan Finish Work
They each do the following:

Itai
Juan
And then commit all changes and push.

After Each Pull
The first thing they do is import the data and schema.

Additional Notes
Add MySQL to PATH.

test!!!!
