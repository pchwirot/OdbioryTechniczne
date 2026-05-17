# WordPress Local Project

Czysty projekt WordPress skonfigurowany do uruchomienia lokalnie za pomocą Docker.

## Wymagania

- Docker ([pobranie](https://www.docker.com/products/docker-desktop))
- Docker Compose (zwykle wchodzi w skład Docker Desktop)

## Szybki Start

### 1. Uruchomienie projektu

```bash
docker-compose up -d
```

To polecenie:
- Pobierze niezbędne obrazy Docker (WordPress, MySQL)
- Uruchomi kontenery w tle
- WordPress będzie dostępny pod adresem: **http://localhost:8080**

### 2. Konfiguracja WordPress

1. Otwórz przeglądarkę: `http://localhost:8080`
2. Wybierz język i konfiguruj WordPress
3. Wpisz dane do logowania (admin, hasło, email)

### 3. Dostęp do bazy danych

**phpMyAdmin** jest dostępny pod adresem: http://localhost:8080 (poprzez interfejs WordPress)

Alternatywnie, możesz połączyć się z MySQL bezpośrednio:
- **Host:** localhost:3306
- **Użytkownik:** wordpress
- **Hasło:** wordpress
- **Baza danych:** wordpress

## Konfiguracja

Edytuj plik `.env` aby zmienić:
- Port WordPress: `WP_PORT=8080`
- Dane bazy danych: `DB_*` zmienne
- Hasło root MySQL: `DB_ROOT_PASSWORD`

## Polecenia Docker

### Stopped kontenery
```bash
docker-compose stop
```

### Usunięcie kontenerów
```bash
docker-compose down
```

### Usunięcie wszystkiego (baza danych, pliki)
```bash
docker-compose down -v
```

### Wyświetlanie logów
```bash
docker-compose logs -f
```

### Wyświetlanie konkretnego kontenera
```bash
docker-compose logs -f wordpress
docker-compose logs -f mysql
```

## Struktura projektu

```
.
├── docker-compose.yml    # Konfiguracja Docker
├── .env                  # Zmienne środowiskowe
├── .gitignore            # Ignorowanie plików w Gicie
├── README.md             # Ten plik
├── wordpress/            # Pliki WordPress (tworzy się automatycznie)
└── mysql_data/           # Dane bazy danych (tworzy się automatycznie)
```

## Porady

- **Backup:** Skopiuj folder `wordpress/` i `mysql_data/` aby utworzyć backup
- **Resetowanie:** Usuń foldery `wordpress/` i `mysql_data/`, a następnie uruchom ponownie `docker-compose up -d`
- **Instalacja wtyczek:** Zainstaluj je normalnie z panelu WordPress lub skopiuj do `wordpress/wp-content/plugins/`
- **Motywy:** Dodawaj motywy z panelu WordPress lub skopiuj do `wordpress/wp-content/themes/`

## Troubleshooting

### Port 8080 już w użyciu
Zmień `WP_PORT` w pliku `.env` na inny, np. 8081

### Kontenery nie startują
```bash
docker-compose logs
# lub dla konkretnego serwisu
docker-compose logs mysql
docker-compose logs wordpress
```

### Problem z uprawnieniami (Linux/Mac)
```bash
sudo chown -R $(id -u):$(id -g) wordpress/ mysql_data/
```

## Dla dodatkowych informacji

- [Dokumentacja WordPress](https://wordpress.org/documentation/)
- [Docker Documentation](https://docs.docker.com/)
- [Docker Compose Reference](https://docs.docker.com/compose/compose-file/)
