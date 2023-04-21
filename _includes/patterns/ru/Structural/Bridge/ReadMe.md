**Мост** (англ. **Bridge**) — структурный шаблон проектирования, используемый в проектировании программного обеспечения
чтобы "разделять абстракцию и реализацию так, чтобы они могли изменяться независимо". Шаблон мост использует
инкапсуляцию, агрегирование и может использовать наследование для того, чтобы разделить ответственность между классами.

Родственным шаблоном для **Моста** является шаблон **Адаптер**, который объединяет связанные части системы и предоставляет
простой интерфейс.

У нас есть филиалы в штатах и Европе. У каждого из регионов разная валюта. И подсчёты прибыли тоже производятся
по-разному. Но наши **`CashBox`** всегда должны быть **`CashBox`**. Это и есть абстракция.
Некоторые методы нашей абстракции, зависят от аргумента, который передаётся. Тип указан интерфейс **`CurrencyInterface`**.
Интерфейс и есть реализация. Нам не нужно каждый раз наследовать родителя и менять что-то. У нас есть один тип, и мы знаем,
как с ним работать. Как мы видим, что данный шаблон мы уже встречали в наших примерах.