**Міст** (англ. **Bridge**) — структурний шаблон проєктування, який використовується в проєктуванні програмного забезпечення,
щоб "розділяти абстракцію та реалізацію так, щоб вони могли змінюватися незалежно". Шаблон міст використовує
інкапсуляцію, агрегування та може використовувати успадкування для того, щоб розділити відповідальність між класами.

Спорідненим шаблоном для **Моста** є шаблон **Адаптер**, який поєднує пов'язані частини системи та надає
простий інтерфейс.

У нас є філії у штатах та Європі. Кожен із регіонів має різну валюту. І підрахунки прибутку теж здійснюються
по-різному. Але наші **`CashBox`** завжди повинні бути **`CashBox`**. Це і є абстракція.
Деякі методи нашої абстракції залежать від аргументу, який передається. Тип вказаного інтерфейсу **`CurrencyInterface`**.
Інтерфейс і є реалізація. Нам не потрібно щоразу успадковувати батька і міняти щось. У нас є один тип, і ми знаємо,
як із ним працювати. Як бачимо, цей шаблон ми вже зустрічали у прикладах.