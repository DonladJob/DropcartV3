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


class user_activations extends table
{
    public function migrate()
    {
        foreach ($this->data as $row) {

            // Make sure user exists
            $user = $this->connection_to->query("SELECT id FROM clients WHERE id=$row->user_id")->fetchAll();

            if (count($user) > 0) {
                $statement = $this->connection_to->prepare("
                  INSERT INTO client_activations 
                     (client_id, token, created_at) 
                  VALUES 
                     (?, ?, ?)
                ");

                $statement->bindParam(1, $row->user_id, \PDO::PARAM_INT);
                $statement->bindParam(2, $row->token);
                if ($row->created_at) {
                    $statement->bindParam(3, $row->created_at);
            } else {
                    $statement->bindParam(3, null, \PDO::PARAM_NULL);
            }

                $statement->execute();
            }
        }
    }
}