all:
	sudo docker compose down
	sudo docker compose up --build

down:
	sudo docker compose down

clean_wp:
	sudo docker volume rm wp_volume
	sudo rm -rf /home/binam/data/wordpress/*

clean_db:
	sudo docker volume rm db_volume
	sudo rm -rf /home/binam/data/mariadb/*