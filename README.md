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

Using the mounted Docker volumes for working with the files on a Windows system, 
version control only the files for the theme. Upon completing all the 
changes, you need for a Git commit, commit with a messages and push to 
GitHub using Git Bash CLI. 

Some useful CLI commands for Git are: 

`git add 'filename.txt'`

`git commit -m 'write commit message here'`

`git push origin` 

`git checkout <existing_branch>`

`git checkout -b <new_branch>`

OceanWP was chosen as the theme for the child theme to be of made from. A folder 
in the theme folder was named oceanwp-child. make a style.css fille with 
the line ` Template:    oceanwp` as this line is the most important to 
use exact characters for example: `G != g`.   


### Deployment

For the deployment an AWS instance with the Bitnami WordPress image was used. 
Use puTTYgen to convert the ssh key so you can ssh into the instance.
If you use puTTY remember to add the key in the Connection/SSH/Auth tab.
Webhooks on the GitHub repository with a WordPress plugin WP Pusher are 
used to automatically update the production site. When you push to the 
production branch of the repo it will trigger the webhook. 
The WordPress Export/Import are used to move content from the 
local to production site.

