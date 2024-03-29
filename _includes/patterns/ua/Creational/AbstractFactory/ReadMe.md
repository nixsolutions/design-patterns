**Абстрактна фабрика** (англ. **Abstract factory**) — породжувальний шаблон проектування, що використовується для створення низки пов'язаних або залежних об'єктів без зазначення їхніх конкретних класів. Класи, що зазвичай створюються, прагнуть реалізувати один і той же інтерфейс.
Клієнт абстрактної фабрики не дбає про те, як створюються ці об'єкти, він просто знає, за якими ознаками
вони взаємопов'язані і як із ними поводитися.

**Плюси:**
* Ізолює конкретні класи;
* Спрощує заміну сімейств товарів;
* Гарантує поєднання продуктів.

**Застосування:**
* Система не повинна залежати від того, як створюються, компонуються і представляються об'єкти, що до неї входять.
* Взаємопов'язані об'єкти, що входять до сімейства, повинні використовуватися разом, і вам необхідно забезпечити виконання
  цього обмеження.
* Система повинна конфігуруватися одним із сімейств складових її об'єктів.
* Потрібно надати бібліотеку об'єктів, розкриваючи лише їхні інтерфейси, але не реалізацію.

Оскільки наша закусочна швидко росте, ми повинні вміти готувати різні продукти. Проаналізувавши ринок, ми вирішили
внести до меню "Комбо". Наш кухар може готувати будь-які "Комбо", головне дати йому рецепт.
Отже, сьогодні у нас буде "Американський день". У нас є на цей випадок рецепт **`UsaComboRecipe`**,
в якому описано, які види продуктів входять в комбо. Даємо його кухареві - і все. Кухар сам зробить все, як зазначено в рецепті.
Завтра ми матимемо "Європейський день". І весь процес відрізнятиметься лише рецептом.

У цьому прикладі видно, що ми використовуємо нашого старого знайомого **Фабричний метод**. Реалізація будь-яких фабрик
заснована на **Фабричному методі**.