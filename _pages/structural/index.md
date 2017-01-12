---
layout: page
breadcrumb: Структурные Шаблоны
permalink: /structural/
---

{% include_absolute {{ site.data.patterns-config.structural.path }} %}

**Шаблоны**:
{% for pattern in site.data.patterns-config.structural.patterns %}
* [{{ pattern[1].title }}]({{ site.baseurl }}{{ pattern[1].permalink }})
{% endfor %}