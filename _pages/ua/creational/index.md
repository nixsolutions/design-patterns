---
layout: page
breadcrumb: Породжуючі Шаблони
pattern-category: patterns-creational
permalink: /ua/creational/
lang: ua
---

{% include {{ site.data.ua.patterns-creational.path }} %}

**Шаблоны**:
{% for pattern in site.data.ua.patterns-creational.patterns %}
* [{{ pattern[1].title }}]({{ site.baseurl }}{{ pattern[1].permalink }})
{% endfor %}
