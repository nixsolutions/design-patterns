---
layout: page
breadcrumb: Шаблони поведінки
pattern-category: patterns-behavioral
permalink: /ua/behavioral/
lang: ua
---
{% include {{ site.data.ua.patterns-behavioral.path }} %}

**Шаблоны**:
{% for pattern in site.data.ua.patterns-behavioral.patterns %}
* [{{ pattern[1].title }}]({{ site.baseurl }}{{ pattern[1].permalink }})
{% endfor %}