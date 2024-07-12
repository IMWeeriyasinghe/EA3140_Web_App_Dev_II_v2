## Endpoint to Feed Data to the Database

Use the following endpoint to feed data into the database:

http://localhost:8080/EA3141_Mobile_App_Dev_II_v2/mvc/public/home/create/Madushanka/IMWeeriyasinghe@example.com


### Notes

- Since this project is hosted in `htdocs`, there's no need to run the project in the terminal.
- When you trigger the above endpoint through the browser, it saves the last two parameters (username and email) to the configured MySQL database. Additionally, it records the created and updated timestamps.
- Currently, the database accepts duplicate entries and does not support Read, Update, or Delete operations. This limitation exists because the project is designed as a learning exercise.
- The primary goal of this project is to understand how the MVC architecture works and to learn how to pass information from the UI to the database using parameters.

### Reference

For more information and tutorials, refer to the following playlist:

[Learn MVC Architecture](https://www.youtube.com/playlist?list=PLfdtiltiRHWGXVHXX09fxXDi-DqInchFD)
