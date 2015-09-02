# capstone

## Working through a New Issue (Branch Creation)
Note: remove any <>

Switch into master and pull the lates version

    git checkout master
    git pull origin master

Create a new branch (an "idea")
Note: branches cannot have spaces - use underscores

    git checkout -b <new_branch_name>

Do your work. When you've completed a "thought" within your "idea", get all files in that "thought" ready to be committed
Always use the -p flag to step through the changes made to that file and accept them - we call this a "sanity check"

    git add -p <file_name>
    y to accept changes
    n to deny changes (puts the file back in "not staged for commit")

Then commit the files with a message of what that thought was

    git commit -m '<message>'

Continue to finish "thoughts" until your entire "idea" is complete. Once you are done, and have all thoughts commited, it is time to push your branch to github for me to get to.

    git push origin <branch_name>

## Creating a Pull Request
This lets me know that you are completely done and want your work put in the main system.

After you have pushed your branch to github:
 - [ ] Log in to github in browser
 - [ ] Click on FaithInMotion/capstone to view the repository
 - [ ] You should see a message in plain view that you have recently pushed a branch. There should be a green button to Compare and Pull Request]
 - [ ] IF there is a warning that your branch cannot be merged (but you can still create the merge request) - DO NOT create the pull request. Instead, go back into command line and 
 follow the steps to update and merge master into your branch. Push again and then follow the steps above.
 - [ ] If your branch is fit to be merged in (no merge conflicts), create the pull request
 - [ ] Under "Assignees" on the left, click the gear and add FaithInMotion.
 - [ ] Alert me in skype that you have created a merge request. I will then get it merged into master

## When Master gets updated...
You may want to wait until you've made your last commit in a branch to update master, as sometimes switching branches can be easily messed up. 
However, if you want to go ahead and update master while you are working on your branch, or if there is a crucial update, then you will need to update mid-branch.

First, you need to save out any changes you have made to your current branch. The message can be anything - I usually leave myself a reminder of what I was doing before stashing, just in case.

    git stash save -u '<message>'

Then change to master and update it.

    git checkout master
    git pull origin master

Now get back into the branch you are working on and update it with the new master.

    git checkout <branch_name>
    git merge master

Finally, put back the changes you had been working on.

    git stash pop

## Other commands you may want to use at some point...
Show what is staged and not staged for a commit

    git status

Basic branch switching

    git checkout <branch> - changes into specified (already created) branch
    git checkout -b <branch> - creates and changes into specified branch

Pulling the latest version of current branch from github

    git pull origin <current_branch>

Different ways to add files to the commit

    git add <file> - Adds a file to the commit staging (gets it ready)
    git add -p <file> - Adds file to commit but steps you through all changes so you can see what happened

Different ways of creating a commit

    git commit - Gets all staged files ready to be pushed to Github - "snapshot", message required (see below on "advanced messaging in command line"
    git commit -m '<Message>' - Same as commit but in-line message accepted

## Vagrant Commands
Vagrant needs to be running to create and run database migrations, and to view the application locally in a web browser.

    vagrant up - Starts vagrant
    vagrant ssh - Moves commands into the virtual machine
    vagrant halt - Stops vagrant
    vagrant destroy - remove created box, sometimes needs to be done. Follow with vagrant up to recreate the vm

To view the application in browser, run vagrant up and then visit:

    http://localhost:8080/

## Creating and Running Migrations
This is slightly tricky but will be extremely necessary to our project. The hardest part is understanding the vm Vagrant is using to launch our Lumen application.

Once you are ready to start working on migrations or view our web application, cd into your project directory and start Vagrant, then ssh inside of the now-running vm.
These commands can be run from any branch, and from any folder inside your project, but you MUST be inside the project.

    vagrant up
    vagrant ssh

Now that you are inside the vm, you need to cd into the correct Lumen directory to make use of the "php artisan" commands. You may notice the artisan php file in our 
directory - this is the file we will be running.

    cd /vagrant/lumen

There are a few artisan commands we need to be aware of.

Run all migrations in the application (good for reseting your database)

    php artisan migrate

Create a migration: This command will create a file inside of lumen/database/migrations - you will edit that file in your text editor after running this command.
I have left migration names for you here for reference - you will change this to read whatever you are creating/adding. 
Please note how specific these names are. Don't forget to remove the <>.

    php artisan make:migration <create_users_table>
    php artisan make:migration <add_needed_columns_to_users_table>
    More information: http://laravel.com/docs/5.1/migrations

## Connecting to the Database with an External Program
I suggest MySql Workbench or Sequel Pro. Here are the connection settings (Vagrant HAS to be running for you to connect):

    Hostname: 127.0.0.1
    Port: 13306
    Username: root
    Password: NONE (no password needed)