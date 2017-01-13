---
layout: page
breadcrumb: Порождающие Шаблоны
permalink: /creational/
---

{% include_absolute {{ site.data.patterns-creational.path }} %}

**Шаблоны**:
{% for pattern in site.data.patterns-creational.patterns %}
* [{{ pattern[1].title }}]({{ site.baseurl }}{{ pattern[1].permalink }})
{% endfor %}
