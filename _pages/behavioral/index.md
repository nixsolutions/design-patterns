---
layout: page
breadcrumb: Шаблоны поведения
permalink: /behavioral/
---

{% include_absolute {{ site.data.patterns-behavioral.path }} %}

**Шаблоны**:
{% for pattern in site.data.patterns-behavioral.patterns %}
* [{{ pattern[1].title }}]({{ site.baseurl }}{{ pattern[1].permalink }})
{% endfor %}