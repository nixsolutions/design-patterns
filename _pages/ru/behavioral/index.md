---
layout: page
breadcrumb: Шаблоны поведения
pattern-category: patterns-behavioral
permalink: ru/behavioral/
lang: ru
---
{% include {{ site.data.ru.patterns-behavioral.path }} %}

**Шаблоны**:
{% for pattern in site.data.ru.patterns-behavioral.patterns %}
* [{{ pattern[1].title }}]({{ site.baseurl }}{{ pattern[1].permalink }})
{% endfor %}