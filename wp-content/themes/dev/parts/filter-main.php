<div class="wrapper">
    <div class="filter-main">
        <span>Поиск тура</span>
        <div class="holy-search">
            <form action="/" method="get" id="form">
                <input type="hidden" name="s" value="">
                <span class="where">Выберете направление</span>
                    <select name="cat" id="dest">
                        <option value="">--------</option>
                        <option value="4">Категория 10</option>
                        <option value="5">Категория 11</option>
                        <option value="30">Категория 15</option>
                        <option value="23">Категория 23</option>
                    </select>
                <span>Выбериете дату</span>
                    <div class="when">
                        <select name="num" id="num">

                        </select>
                        <select name="mounth" id="mounth">

                        </select>
                        <select name="year" id="year">

                        </select>
                    </div>
                <span>Продолжительность</span>
                    <div class="duration">
                        <select name="duration" id="duration">

                        </select>
                    </div>
                    <span>Питание</span><span class="star" style="margin-left: 68px">Отель</span>
                    <div class="board">
                        <select name="board" id="board">

                        </select>
                        <select name="star" id="star">
                            <option value="star">any</option>
                        </select>
                    </div>
                    <span>Взрослые</span><span class="star" style="margin-left: 60px">Дети0-17</span>
                    <div class="board">
                        <select name="board" id="board">

                        </select>
                        <select name="star" id="star">
                            <option value="star">0</option>
                        </select>
                    </div>

                <input type="submit" value="Найти" id="submit">
            </form>
        </div>
    </div>
</div>

