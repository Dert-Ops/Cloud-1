CONTAINERS	= $(shell docker ps -qa)
IMAGES		= $(shell docker images -qa)
VOLUMES		= $(shell docker volume ls -q)
NETWORKS	= $(shell docker network ls -q)

hostname		:
				@ echo "127.0.0.1 binam.42.tr" >> /etc/hosts

volume_dir		:
				@ mkdir -p /home/binam/data/wordpress
				@ mkdir -p /home/binam/data/mariadb

up				: volume_dir
				@ docker compose up --build

down			:
				@ docker compose down

rm_containers	: down
				@ docker rm -f $(CONTAINERS); true;

rm_images		:
				@ docker rmi -f $(IMAGES); true;

rm_volumes		:
				@ docker volume rm $(VOLUMES); true;

rm_networks		:
				@ docker network rm $(NETWORKS) 2> /dev/null; true;

rm_volume_dir	:
				@ rm -rf /home/binam/data

clean			: rm_containers rm_images rm_networks rm_volumes rm_volume_dir
