# Unaloműző szolgáltatás

## Alapfeladatok (2 pont):
Készítsen egy webalkalmazást, amely egy unaloműző szolgáltatást valósít meg. Az alkalmazás tevékenységhez tartalmaz egy adatbázist, amelyekből javaslatokat tesz a felhasználónak különböző időtöltésekre. A rendszernek legalább az alábbi funkciókat tartalmaznia kell:
 1. adatbázis a tevékenységekről. Mindegyik tevékenység pontosan 1 kategóriához tartozik.
 2. a nyitóoldal betöltésekor a rendszer véletlenszerűen javasol egy tevékenységet a felhasználónak.
 3. a tevékenységhez tartozó kategóriának kattinthatónak kell lennie. A kategóriára kattintva a rendszer a választott kategóriából választ véletlenszerű tevékenységet.
Az alapfeladatokat teljesítve a hallgatók 2-es osztályzatot kapnak.

## Pluszfeladatok:
Az alapfeladatok mellett az alábbi pluszfeladatokat lehet megoldani. Minden pluszfeladat 1 pontot ér, ami egyenként eggyel javítja az osztályzatot.
 1. tároljuk el a tevékenységhez annak anyagi vonzatát. Ez egy 1-100 közötti érték, 1 a legolcsóbb, 100 a legdrágább. Tároljuk továbbá azt is, hogy az adott tevékenységre hány főre van szükség, ezzel is pontosítva az esetleges találatokat. Az új adatokra készítsünk egy felületet, ahol azokat megadva az új paraméterekkel keres a rendszer találatokat. A két új értékhez tól-ig mezőket lehessen megadni.
 2. kössük a szolgáltatás használatát bejelentkezéshez. Biztosítsunk egy regisztrációs felületet, ahol email és jelszó megadásával a felhasználók regisztrálhassanak. Bejelentkezés nélkül csak egy rövid tájékoztatást jelenítsünk meg a látogatónak.
 3. keresési funkciók implementása: lehessen keresni a tevékenység nevére, akár részben is. A találatokat lehessen tovább szűkíteni további paraméterekkel (pl. anyagi vonzat, szükséges résztvevők, kategória). A találatok egy lapozható listában jelenjenek meg.
 4. biztosítson egy API végpontot ugyanezen funkciókra.
