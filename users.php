<?php
/**
 * =========================================================
 *                        DROPCART
 *                      ------------
 * This file is part of the source code of Dropcart and is
 * subject to the terms and conditions defined in the license
 * file include in this package.
 *
 * CONFIDENTIAL:
 * All information contained herein is, and remains the property
 * of Dropcart and its suppliers, if any.  The intellectual and
 * technical concepts contained herein are proprietary to Dropcart
 * and its suppliers and may be covered by Dutch and Foreign Patents,
 * patents in process, and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from Dropcart.
 *
 * =========================================================
 */

namespace ProductionSeeder\Migrator\Tables;


class users extends table
{
    public function migrate()
    {
        foreach ($this->data as $row) {

            $statement = $this->connection_to->prepare("
              INSERT INTO clients 
                 (id, username, password, first_name, last_name, email, ip, created_at, updated_at, deleted_at, activated) 
              VALUES 
                 (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");

            $statement->bindParam(1, $row->id, \PDO::PARAM_INT);
            $statement->bindParam(2, $row->username);
            $statement->bindParam(3, $row->password);
            $statement->bindParam(4, $row->first_name);
            $statement->bindParam(5, $row->last_name);
            $statement->bindParam(6, $row->email);
            $statement->bindParam(7, $row->ip);
            if ($row->created_at) {
                $statement->bindParam(8, $row->created_at);
            } else {
                $statement->bindParam(8, null, \PDO::PARAM_NULL);
            }
            if ($row->updated_at) {
                $statement->bindParam(9, $row->udpated_at);
            } else {
                $statement->bindParam(9, null, \PDO::PARAM_NULL);
            }
            if ($row->deleted_at) {
                $statement->bindParam(10, $row->deleted_at);
            } else {
                $statement->bindParam(10, null, \PDO::PARAM_NULL);
            }
            $statement->bindParam(11, $row->status);

            $statement->execute();

            // Create system user
            $this->createSystemUser($row->id, "Client");
        }
    }
}