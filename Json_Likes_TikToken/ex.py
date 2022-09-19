import jwt
from itertools import permutations
import string

result = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VybmFtZSI6ImhlbGxvIiwibGV2ZWwiOjF9.4v-Z9gkvU92FkFwoup0hOwz0QHZoqN5pykpSPP4UgJ4';

for secret in map(lambda x: "".join(x), permutations(string.printable[10:36], 5)):
    try:
        print(jwt.decode(result, secret, algorithms="HS256"))
        print(secret)
        break
    except:
        pass

