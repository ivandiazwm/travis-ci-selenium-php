# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"

  config.vm.network :forwarded_port, guest: 80, host: 8080

  config.vm.synced_folder "./", "/vagrant_data", :create => true, :owner=> 'vagrant', :group=>'www-data', :mount_options => ['dmode=775','fmode=775']
  doc_root = '/vagrant_data/public'

  config.vm.provision :chef_solo do |chef|
    chef.cookbooks_path = "./cookbooks"
    chef.add_recipe "omusubi"
    chef.json = { doc_root: doc_root}
  end

  config.vm.provision :shell, :inline => <<-EOS
    wget http://selenium.googlecode.com/files/selenium-server-standalone-2.31.0.jar
  EOS
end
