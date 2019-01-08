<form action="{{ url('kontakti') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label name="email">Epasts:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject">Tēma:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">Jūsu ziņa:</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Rakstiet šeit..."></textarea>
                    </div>

                    <input type="submit" value="Sūtīt ziņu" class="btn btn-success">
                </form>