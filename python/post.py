import requests

url = "https://dev.29kreativ.com/recruitment/levels/"

name = 'mukul'
code = 'ba5e3f51a592e97df7ad94b2c1cd68fd'

payloadObj = {
    "name": name,
    "code": code
}

headers = {
    "Authorization": f"Bearer {code}"
}

response = requests.post(url=url, data=payloadObj, headers=headers)

print(response.text)
