all:
	rm -rf webapp.zip
	zip -r webapp.zip core/
	ansible-playbook -i inventory.ini playbook.yaml