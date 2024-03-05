# About
Simple comics web app built with Codeigniter. This project for my personal education purpose to learn about PHP and Codeigniter 4 Framework. This project contains CRUD with simple auth protected page. 

Features : 
- Dashboard
- Comics Collection
- Add Comics
- Delete Comics
- Update Comics
- Protected User Only Page

Built with PHP, Codeigniter 4, Bootstrap & Ajax.

Special Thanks to <a href="https://www.youtube.com/@sandhikagalihWPU">Web Programming Unpas</a> youtube channel for the CI4 Tutorial. You can watch it <a href="https://www.youtube.com/@sandhikagalihWPU](https://www.youtube.com/watch?v=VckqV2wC1gs&list=PLFIM0718LjIUkkIq1Ub6B5dYNb6IlMvtc">here</a>.

Screenshots : 
![image](https://github.com/yohanesrioirsan/ci4playground/assets/82473445/0fb83f28-f766-44e6-8dc8-96f7977c540a)

![image](https://github.com/yohanesrioirsan/ci4playground/assets/82473445/f27756e7-8784-4830-8fa2-6b76c338b86d)

![image](https://github.com/yohanesrioirsan/ci4playground/assets/82473445/1d9cd4f5-b014-4ca5-96a4-95b83df69c9e)

![image](https://github.com/yohanesrioirsan/ci4playground/assets/82473445/1a3a2126-74b5-4747-a24d-8751386177ce)

![image](https://github.com/yohanesrioirsan/ci4playground/assets/82473445/4453f5dd-82a9-4440-98a8-238c9541de10)

![image](https://github.com/yohanesrioirsan/ci4playground/assets/82473445/61208ea0-f566-489c-99ba-101104f99ca6)

# How to run
*this project made in Codeigniter 4 v4.4.6 | Composer 2.7.1 | PHP 7.4.33*
> git clone this project
> open terminal and run "commposer update"

> configure env files
  ```
  CI_ENVIRONMENT = development
  app.baseURL = 'http://localhost:8080/'
  database.default.hostname = localhost
  database.default.database = testing
  database.default.username = root
  database.default.password = 
  database.default.DBDriver = MySQLi
  database.default.DBPrefix =
  database.default.port = 3306
  ```

> Database default settings
  ```
  users : username (varchar 225), password (varchar 225)
  comic : id (int | Primary key | Auto Increment), title (varchar 225), slug (varchar 225) , writer (varchar 225), author (varchar 225), synopsis (TEXT), cover (varchar 225), created_at (datetime), updated_at (datetime)
  ```
 
> project will be running on :8080

