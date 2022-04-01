#建資料夾(root)
mkdir -pv /var/log/docker/data/mysql
mkdir -pv /var/log/nginx
chmod -R 777 /var/log/docker
chmod -R 777 /var/log/nginx

#docker run
docker-compose up -d


