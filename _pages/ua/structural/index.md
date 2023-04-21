---
layout: page
breadcrumb: Структурні шаблони
pattern-category: patterns-structural
permalink: /ua/structural/
lang: ua
---

{% include {{ site.data.ua.patterns-structural.path }} %}

**Шаблоны**:
{% for pattern in site.data.ua.patterns-structural.patterns %}
* [{{ pattern[1].title }}]({{ site.baseurl }}{{ pattern[1].permalink }})
{% endfor %}