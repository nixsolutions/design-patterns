---
layout: page
breadcrumb: Порождающие Шаблоны
permalink: /creational/
---

{% include_absolute {{ site.data.patterns-config.creational.path }} %}

**Шаблоны**:
{% for pattern in site.data.patterns-config.creational.patterns %}
* [{{ pattern[1].title }}]({{ site.baseurl }}{{ pattern[1].permalink }})
{% endfor %}

<details> 
  <summary>Q1: What is the best Language in the World? </summary>
   A1: JavaScript 
</details>