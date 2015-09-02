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

    vagrant up - Starts vagrant
    vagrant ssh - Moves commands into the virtual machine
    vagrant halt - Stops vagrant
    vagrant destroy - remove created box, sometimes needs to be done. Follow with vagrant up to recreate the vm