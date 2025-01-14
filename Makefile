SHELL := /bin/bash

all:
	rm -rf webapp.zip
	zip -r webapp.zip core/
	docker run -it --rm -v ~/.ssh:/root/.ssh -v ~/.aws:/root/.aws -v $(PWD):/apps -w /apps alpine/ansible ansible-playbook -i inventory.ini playbook.yaml
