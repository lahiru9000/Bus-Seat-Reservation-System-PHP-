<table>
    <thead>
        <tr>
            <th>Bus Number</th>
            <th>Duration</th>
            <th>Route Number</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($buses as $bus) : ?>
            <tr>
                <td><?php echo $bus['bus_number']; ?></td>
                <td><?php echo $bus['duration']; ?></td>
                <td><?php echo $bus['route_number']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>