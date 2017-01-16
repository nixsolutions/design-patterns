---
layout: page
breadcrumb: Структурные Шаблоны
pattern-category: patterns-structural
permalink: /structural/
---

{% include_absolute {{ site.data.patterns-structural.path }} %}

**Шаблоны**:
{% for pattern in site.data.patterns-structural.patterns %}
* [{{ pattern[1].title }}]({{ site.baseurl }}{{ pattern[1].permalink }})
{% endfor %}