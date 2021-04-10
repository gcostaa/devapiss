Author: Gustavo Costa de Oliveira Arruda
Date: 2021/04/10

Description: Integration with the senhasegura API for credentials password 
query (version 1.0)

How to use:

- File config.json

    In the file you must insert your access keys generated through the tool. 
    The keys are: Consumer Key and oAUTH Token

- Request

    After configuring the config.json file, just call the URL 
    https://IP_OR_DNS/api/get.php?id=credential_id

    or

    curl -X "GET" https://server/api/get.php?id=2