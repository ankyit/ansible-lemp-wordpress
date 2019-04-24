#! /bin/bash
sudo apt-get update && 
sudo apt-get upgrade -y &&
sudo apt-get install software-properties-common &&
sudo apt-add-repository --yes --update ppa:ansible/ansible &&
sudo apt-get install ansible &&
ansible-galaxy install geerlingguy.php-versions &&
ansible-galaxy install geerlingguy.php &&
ansible-galaxy install geerlingguy.security &&
ansible-galaxy install geerlingguy.firewall &&
ansible-galaxy install geerlingguy.swap &&
ansible-galaxy install sbaerlocher.wp-cli
