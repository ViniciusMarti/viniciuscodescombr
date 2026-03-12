import json
import re

with open(r'c:\Users\marti\Documents\repositorio\viniciuscodescombr\data\site_data.json', 'r', encoding='utf-8') as f:
    data = json.load(f)

with open(r'c:\Users\marti\Documents\repositorio\viniciuscodescombr\includes\init.php', 'r', encoding='utf-8') as f:
    init_content = f.read()

# Extract keys from $categories_info in init.php using regex
init_keys = re.findall(r'"([^"]+)"\s*=>\s*\[', init_content)
# Filter out "default", "institucional", "title", etc. (simple heuristic)
cat_keys = [k for k in init_keys if k not in ['default', 'institucional', 'title', 'subtitle', 'promo_title', 'promo_text']]

print("Slugs in init.php:")
for k in cat_keys:
    print(f"- {k}")

print("\nSlugs in categories_videos (site_data.json):")
if 'categories_videos' in data:
    for k in data['categories_videos']:
        print(f"- {k}")

print("\nCommon slugs:")
for k in set(cat_keys) & set(data['categories_videos'].keys()):
    print(f"- {k}")

print("\nMissing in site_data.json:")
for k in set(cat_keys) - set(data['categories_videos'].keys()):
    print(f"- {k}")
