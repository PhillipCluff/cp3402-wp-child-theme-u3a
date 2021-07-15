# Townsville U3A Child theme/Website Development

## Description
This a child WordPress theme, the parent theme is [OceanWP](https://oceanwp.org/).
Developed by Phillip Cluff for the [University of the Third Age Townsville](https://u3atownsville.com/).

## Documentation
### Theme Development
The local development environment is Docker. Please follow [this link](https://docs.docker.com/get-docker/) 
for how to install Docker.

Clone `docker-compose.yml` to the local development folder. Add a `db_root_password` 
text file and a `db_password` text file in the folder, put strong passwords in each.
Run `docker-compose up` command in CLI.

Some useful CLI commands for Git are: 

`git add 'filename.txt'`

`git commit -m 'write commit message here'`

`git push origin` 

`git checkout <existing_branch>`

`git checkout -b <new_branch>` 


### Deployment
