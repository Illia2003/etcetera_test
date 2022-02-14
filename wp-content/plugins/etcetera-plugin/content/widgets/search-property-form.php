<section class="row">
            <div class="col-7">
                <h2><?= $instance['title'];?></h2>
                <div id="ajax-results"></div>
            </div>
            <form class="card col-5" id="filter">
                <input type="hidden" name="posts_per_page" value="<?= $instance['posts_per_page'];?>" id="filter-posts-per-page">
                <div class="card-body">
                    <div class="form-group">
                        <label for="filter-name">Hазвание дома</label>
                        <input type="text" class="form-control" name="filter-house_name" id="filter-name">
                    </div>
                    <div class="form-group">
                        <label for="filter-address">Координаты местонахождения</label>
                        <input type="text" class="form-control" name="filter-address" id="filter-address">
                    </div>
                    <div class="form-group">
                        <label for="filter-count-floors">Количество этажей</label>
                        <select class="form-control" name="filter-count_of_floors" id="filter-count-floors">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Тип строения</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter-type" id="filter-type-1" value="panel">
                            <label class="form-check-label" for="filter-type-1">
                                Панель
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter-type" id="filter-type-2" value="brick">
                            <label class="form-check-label" for="filter-type-2">
                                Кирпич
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter-type" id="filter-type-3" value="foam block">
                            <label class="form-check-label" for="filter-type-3">
                                Пеноблок
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="filter-environmental_friendlinesss">Экологичность</label>
                        <select class="form-control" name="filter-environmental_friendliness" id="filter-environmental_friendliness">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <h3>Помещение</h3>
                    <div class="form-group">
                        <label for="filter-square">Площадь</label>
                        <input type="text" class="form-control" name="filter-room_square" id="filter-square">
                    </div>
                    <div class="form-group">
                        <label for="filter-count_of_rooms">Количество комнат</label>
                        <input type="number" class="form-count_of_rooms" name="filter-room_count_of_rooms" id="filter-count_of_rooms">
                    </div>
                    <div class="form-group">
                        <label>Балкон</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter-room_balcone" id="filter-balcone-1" value="Да">
                            <label class="form-check-label" for="filter-balcone-1">
                                Да
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter-room_balcone" id="filter-balcone-2" value="Нет">
                            <label class="form-check-label" for="filter-balcone-2">
                                Нет
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Санузел</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter-room_bathroom" id="filter-bathroom-1" value="Да">
                            <label class="form-check-label" for="filter-bathroom-1">
                                Да
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="filter-room_bathroom" id="filter-bathroom-2" value="Нет">
                            <label class="form-check-label" for="filter-bathroom-2">
                                Нет
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="filter-submit">Искать</button>
                </div>
            </form>
        </section>