import json
with open(r'c:\Users\marti\Documents\repositorio\viniciuscodescombr\data\site_data.json', 'r', encoding='utf-8') as f:
    data = json.load(f)

print("Categories in categories_videos:")
if 'categories_videos' in data:
    for cat in data['categories_videos']:
        print(f"- {cat}")
else:
    print("categories_videos NOT found at top level")

print("\nPages in pages:")
if 'pages' in data:
    for p in data['pages']:
        print(f"- {p}")
else:
    print("pages NOT found at top level")
