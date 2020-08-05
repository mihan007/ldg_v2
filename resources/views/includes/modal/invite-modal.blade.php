<div class="modal fade js-invite-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-modal-title">Приглашение пользователя</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="balance-actions" method="post" action="#" novalidate>
                    <div class="form-group">
                        <label class="sr-only" for="invite-name">Имя</label>
                        <input class="form-control" type="text" id="invite-name" placeholder="Имя" required>
                        <div class="invalid-feedback invite-name-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="invite-email">Почта</label>
                        <input class="form-control" type="email" id="invite-email" placeholder="Почта" required>
                        <div class="invalid-feedback invite-email-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group">
                            <select class="custom-select select-item w-100">
                                <option value="1" selected>Менеджер</option>
                                <option value="2">Администратор</option>
                            </select>
{{--                        <label class="sr-only" for="invite-role">Роль</label>--}}
{{--                        <select class="js-role-select w-75" name="role" data-tags="true" data-placeholder="Select an option"--}}
{{--                                data-allow-clear="true">--}}
{{--                            <option class="timezone-option" selected>Выберите роль</option>--}}

{{--                        </select>--}}
{{--                        <input class="form-control" type="text" id="invite-role" placeholder="Роль" required>--}}
{{--                        <div class="invalid-feedback invite-role-invalid-feedback">Сообщение об ошибке</div>--}}
                    </div>
                    <div class="form-group modal-action-buttons">
                        <button class="btn btn-primary modal-action-button" type="submit">Пригласить</button>
                        <button class="btn cancel-button modal-action-button" data-dismiss="modal"
                                type="button">Отменить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
