import jwt
from itertools import permutations
import string

result = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VybmFtZSI6Imd1ZXN0IiwibGV2ZWwiOjF9.03D5SP8zfaNhf-bNdfQ0vZM2PSLbgM6YPxGA59n_DLo'

for secret in map(lambda x: "".join(x), permutations(string.printable[10:36], 5)):
    try:
        print(jwt.decode(result, secret, algorithms="HS256"))
        print(secret)
        break
    except:
        pass

