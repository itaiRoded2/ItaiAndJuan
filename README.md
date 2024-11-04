#Notes

When Itai is on Site 1 and make db changes
Those are saved in HIS LOCAL XAMPP sql server
to "save them"
Itai needs to run the scripts
//TO SAVE
npm run itai-migrate-db-schema
npm run itai-migrate-db-data

This will SAVE the scheme and DATA

WHen JUAN takes get latest
HE NEEDS to EXPORT the data and scheme from the the db folder to HIS MAMP because our sites read from our local DBS!
He will need to run an import using php admin tool (on http://localhost/phpmyadmin/) (for him http://localhost:8888/phpmyadmin/)
And click site1 db (create if missing)
than import the schema and data
 
To repair DB try adding to wp-config.php
define('WP_ALLOW_REPAIR', true);
then remove after

Visit http://yourdomain.com/wp-admin/maint/repair.php and follow the instructions. Remove this line from wp-config.php afterward.