import json
with open(r'c:\Users\marti\Documents\repositorio\viniciuscodescombr\data\site_data.json', 'r', encoding='utf-8') as f:
    data = json.load(f)

for k in data['categories_videos']:
    print(f"'{k}' length: {len(k)}")
