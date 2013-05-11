<table>
    <th>
        Name
    </th>
    <th>
        Address
    </th>
    <th>
        Tel
    </th>
    <th>
        Service
    </th>
    <?php foreach($search_result as $result) : ?>
    <tr>
        <td><?php echo anchor('search/detail/id/'. $result->idvendor_info, $result->company_name);?> </td>
        <td><?php echo $result->permanent_address;?></td>
        <td><?php echo $result->contact_number;?></td>
        <td><?php echo $result->services;?></td>
    </tr>
    <?php endforeach; ?>
</table>