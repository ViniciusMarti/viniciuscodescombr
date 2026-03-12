import datetime

todays_date = datetime.date.today().isoformat()
categories = [
    "tecnologia-e-reviews",
    "nomadismo-e-viagens",
    "financas-pessoais-e-economia",
    "lar-decoracao-e-vida-solo",
    "carreira-estudos-e-desenvolvimento"
]

xml_blocks = ""
for cat in categories:
    xml_blocks += f"""  <url>
    <loc>https://viniciuscodes.com.br/{cat}</loc>
    <lastmod>{todays_date}</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.9</priority>
  </url>\n"""

# Add 'sobre' too
xml_blocks += f"""  <url>
    <loc>https://viniciuscodes.com.br/sobre</loc>
    <lastmod>{todays_date}</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
  </url>\n"""

with open(r'c:\Users\marti\Documents\repositorio\viniciuscodescombr\sitemap.xml', 'r', encoding='utf-8') as f:
    lines = f.readlines()

# Remove closing tag
if lines[-1].strip() == "</urlset>":
    lines = lines[:-1]
elif lines[-1].strip() == "":
    if lines[-2].strip() == "</urlset>":
        lines = lines[:-2]

# Append new blocks and closing tag
with open(r'c:\Users\marti\Documents\repositorio\viniciuscodescombr\sitemap.xml', 'w', encoding='utf-8') as f:
    f.writelines(lines)
    f.write(xml_blocks)
    f.write("</urlset>\n")
